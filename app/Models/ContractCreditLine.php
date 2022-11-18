<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractCreditLine extends Model
{
    use HasFactory;

    protected $table = 'TBL_SRC_Contract_Credit_Line_All';

    protected $fillable = ['Value_Date', 'Loading_TimeStamp', 'Record_Type', 'Management_Unit_ID', 'Branch_ID',
        'Contract_Ref_ID', 'Contract_Reference', 'Credit_Limit_Amount', 'Credit_Limit_Usage_Amount',
        'Interest_Tracks_Counter_Fixed', 'Original_Currency_Code_Fixed', 'Original_Currency_Code_SRC', 'Balance_Due',
        'Payment_History_Data_Fixed', 'Contract_Status_Fixed', 'Contract_Status_SRC', 'Late_Payment_Code_Fixed',
        'Unpaid_Balance_Amount', 'First_Unpaied_Event_Date', 'Last_Payment_Date', 'Actual_Contract_Expiry_Date',
        'Linked_Customers_All_Types_Fixed', 'Linked_Customers_Reported_Types_Only_Fixed', 'Sub_Management_Unit_ID',
        'Source_System_Code', 'Data_Process_Type', 'Partition_ID', 'work_flow_source', 'Active_Flag'];

    public $timestamps=false;

    public $incrementing=false;

}
