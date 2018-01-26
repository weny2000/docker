<?php
namespace Reports\Admin\Reports;

class NewHiresEmployeeReport extends ActiveEmployeeReport
{
    
    
    public function getWhereQuery($request)
    {
        $query = "where ";
        $params = array();
        if (!empty($request['department']) && $request['department'] != "NULL") {
            $depts = $this->getChildCompanyStuctures($request['department']);
            $query.="department in(".implode(",", $depts).") and ";
        }
        
        if (empty($request['date_start']) || $request['date_start'] == "NULL") {
            $request['date_start'] = date("Y-m-d 00:00:00");
        }
        
        if (empty($request['date_end']) || $request['date_end'] == "NULL") {
            $request['date_end'] = date("Y-m-d 23:59:59");
        }
        
        $query.="joined_date >= ? ";
        $params[] = $request['date_start']." 00:00:00";
        
        
    
        $query.="and joined_date <= ? ";
        $params[] = $request['date_end']." 23:59:59";
        
        return array($query, $params);
    }
}
