<?php

//namespace Befeni\Model;

require_once( 'conf.php'); // connection configuration file
/**
* A test Shirt Order model
*/
class ShirtOrder
{
	/**
	 * The id of the shirt order
	 *
	 * @var integer
	 */
	public $id;
	
	/**
	 * The id of the customer
	 *
	 * @var integer
	 */
	public $customerId;
	
	/**
	 * The id of the fabric
	 *
	 * @var integer
	 */
	public $fabricId;
	
	/**
	 * The size of the customer's collar in inches
	 *
	 * @var integer
	 */
	public $collarSize;
	
	/**
	 * The size of the customer's chest in inches
	 *
	 * @var integer
	 */
	public $chestSize;
	
	/**
	 * The size of the customer's waist in inches
	 *
	 * @var integer
	 */
	public $waistSize;
	
	/**
	 * The size of the customer's wrist in inches
	 *
	 * @var integer
	 */
	public $wristSize;
	

	
    // select Shirt Orders

    public static function select_shirt_order($where = null) {
                
    $query = "SELECT 
                    *
              FROM 
                   shirt_table
                     " ; 

	if ($where) { $query .=  " " . $where ; } 

    try{$connection = DB_Access::initDB();}catch(Exception $e){throw Exception($e->getMessage());}
    try{$result = DB_Access::issueQuery($connection, $query);}catch(Exception $e){throw Exception($e->getMessage());}
    
    //Prepare Data:
    $rowArray;
    $rowID = 1;
    while($row = DB_Access::fetchRow($result)){
                $rowArray[$rowID]['id']                           = $row['id'];
                $rowArray[$rowID]['customer_id']                  = $row['customer_id'];
                $rowArray[$rowID]['fabric_id']                    = $row['fabric_id'];
                $rowArray[$rowID]['colar_size']                   = $row['colar_size'];
                $rowArray[$rowID]['waist_size']                   = $row['waist_size'];
				$rowArray[$rowID]['wrest_size']                   = $row['wrest_size'];
                

                $rowID++;
    }  
    
    DB_Access::closeDB($connection);

    return $rowArray;
}


// update shirts table

public static function update_shirt_order($table_array, $where = null) {
                
    $query = "UPDATE
                   shirt_table
					SET customer_id  = " . $table_array['customer_id'] . ",
					    fabric_id  = " . $table_array['fabric_id'] . ",
						colar_size  = " . $table_array['colar_size'] . ",
						waist_size  = " . $table_array['waist_size'] . ",
						wrest_size  = " . $table_array['wrest_size'] . "
                     " ; 

	if ($where) { $query .=  " " . $where ; } 

    try{$connection = DB_Access::initDB();}catch(Exception $e){throw Exception($e->getMessage());}
    try{$result = DB_Access::issueQuery($connection, $query);}catch(Exception $e){throw Exception($e->getMessage());}
    
    
    
    DB_Access::closeDB($connection);

    return $result;
}

// add shorts table


public static function add_shirt_order($table_array, $where = null) {
                
    $query = "INSERT INTO
                   shirt_table ( customer_id, fabric_id , colar_size ,waist_size , wrest_size ) 
					VALUES ( " . $table_array['customer_id'] . ",
					     " . $table_array['fabric_id'] . ",
					     " . $table_array['colar_size'] . ",
					     " . $table_array['waist_size'] . ",
						 " . $table_array['wrest_size'] . "
                     " ; 

	 if ($where) { $query .=  " " . $where ; } 

    try{$connection = DB_Access::initDB();}catch(Exception $e){throw Exception($e->getMessage());}
    try{$result = DB_Access::issueQuery($connection, $query);}catch(Exception $e){throw Exception($e->getMessage());}
    
    
    
    DB_Access::closeDB($connection);

    return $result;
}


// delete short_table


public static function delete_shirt_order($table_array, $where = null) {
                
    $query = "DELETE FROM
                   shirt_table 
                     " ; 

	if ($where) { $query .=  " " . $where ; } 

    try{$connection = DB_Access::initDB();}catch(Exception $e){throw Exception($e->getMessage());}
    try{$result = DB_Access::issueQuery($connection, $query);}catch(Exception $e){throw Exception($e->getMessage());}
    
    DB_Access::closeDB($connection);

    return $result;
}


// end of  Class

}




?>
