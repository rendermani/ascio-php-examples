<?php
require_once '../DnsService.php';
echo "start\n";
/**
 * 
 * @author mlautenschlager
 * 
 */
class ZoneUpdater {
	var $dnsService;
	public function __construct($user,$pw,$partner = false) {
		$this->dnsService = new DnsService($user,$pw,$partner);
	}
	public function replaceCname($zoneName, $oldTarget,$newTarget) {
		$zone = new GetZone();
		$zone->zoneName = $zoneName;
		$zoneData = $this->dnsService->GetZone($zone);
		foreach ($zoneData->zone->Records->Record as $nr => $record) {
			if($record->Target == $oldTarget){
				echo "Create Zone Record in $zoneName\n";								
				$aRecord = new A();
				$aRecord->Source 	= $record->Source; 
				$aRecord->Target 	= $newTarget; 
				$aRecord->TTL    	= $record->TTL;
				$createRecord = new CreateRecord();
				$createRecord->zoneName = $zoneName;
				$createRecord->record    = $aRecord;
				$result = $this->dnsService->CreateRecord($createRecord);
				echo "Create $zoneName: ".$result->CreateRecordResult->StatusMessage."\n";
				$deleteRecord = new DeleteRecord();
				$deleteRecord->recordId = $record->Id;
				$result = $this->dnsService->DeleteRecord($deleteRecord);
				echo "Delete $zoneName: ".$result->DeleteRecordResult->StatusMessage."\n";
			}
		}
	}
	public function updateCnameRecords($oldTarget,$newTarget) {
		$searchZoneClause = new SearchZoneClause();
		$searchZoneClause->SearchZoneField = SearchZoneField::Target;
		$searchZoneClause->Operator = SearchOperatorType::Is;
		$searchZoneClause->Value = $oldTarget;
		$searchZone = new SearchZone();
		$searchZone->searchZoneClauses = array($searchZoneClause);
		$searchZone->zoneInfoLevel = ZoneInfoLevel::Basic;
		$result = $this->dnsService->SearchZone($searchZone);
		if(!isset($result->zones->Zone)) return;
		$count =  count($result->zones->Zone);
		$zones = is_array($result->zones->Zone) ? $result->zones->Zone : array($result->zones->Zone);
		$done = 0; 
		
		foreach ($zones as $key => $zone) {
			$done++;
			echo "** Change Zone: ".$zone->ZoneName."($done/$count) **\n";
			$this->replaceCname($zone->ZoneName,$oldTarget,$newTarget);
		}
		
	}
}

$zoneUpdater = new ZoneUpdater("user", "pw");
$zoneUpdater->updateCnameRecords("target-cname-here","new-a-record-ip-here");

echo "end\n"; 

