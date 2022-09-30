<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractRelationAll extends Model
{
    use HasFactory;

    protected $table = 'TBL_SRC_Contract_customer_Relation_All';

    protected $fillable = ['Value_Date', 'Loading_TimeStamp', 'Record_Type', 'Management_Unit_ID', 'Branch_ID',
        'Contract_Ref_ID', 'Contract_Reference', 'Customer_Update_Indicator_Fixed', 'Customer_Relation_Type_Fixed',
        'Customer_Relation_Type_SRC', 'Customer_Relation_Cancellation_Indicator_Fixed', 'Customer_ID_Number',
        'Passport_ID_Number', 'Country_Code_Fixed', 'Country_Code_SRC', 'Authorized_Dealer_ID',
        'Customer_ID_Number_Update_Indicator_Fixed', 'Previous_Customer_ID', 'Previous_Country_code_Fixed',
        'Previous_Country_code_SRC', 'First_Name', 'Last_Name', 'Date_Of_Birth', 'Street_Name_And_Number',
        'First_Line_Of_Address', 'POB', 'IDF_POB', 'ZIP_Code', 'City', 'Country', 'Address_Verification_Code',
        'Date_Of_Death', 'Sub_Management_Unit_ID', 'Source_System_Code', 'Data_Process_Type', 'Date_Customer_Agreement',
        'Agreement_Number', 'New_First_Name', 'New_Last_Name', 'Partition_ID', 'Latin_First_Name', 'Latin_Last_Name',
        'Entity_ID', 'Identification_Document_Type', 'work_flow_source', 'Active_Flag'];
}
