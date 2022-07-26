<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractMainAll extends Model
{
    use HasFactory;

    protected $table = 'tbl_src_contract_main_all';

    protected $fillable = ['Value_Date', 'Loading_TimeStamp', 'Record_Type', 'Management_Unit_ID', 'Branch_ID',
        'Contract_Ref_ID', 'Contract_Reference', 'Contract_Event_Indicator_Fixed', 'Previous_Contract_Ref_ID',
        'Previous_Branch_ID', 'Contract_Change_Indicator_Fixed', 'Partial_Report_Indicator_Fixed',
        'Contract_Start_Date', 'Contract_Type_Fixed', 'Contract_Main_Type_SRC', 'Contract_Sub_Type_SRC',
        'Contract_Purpose_Fixed', 'Contract_Purpose_SRC', 'Securites_Type_Fixed', 'Securites_Level_Fixed',
        'Expiry_Date', 'Cession_Amount_Fixed', 'Forgiveness_Type', 'Comment_Code', 'Prime_Rate_SEC',
        'Adjusted_Rate_percent_SRC', 'Additional_Identification_Num', 'Additional_contract_Num',
        'Sub_Management_Unit_ID', 'Source_System_Code', 'Data_Process_Type', 'Partition_ID', 'work_flow_source',
        'Active_Flag'];
}
