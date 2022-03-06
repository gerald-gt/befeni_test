<?php
    
/* Database_connection Class 

   Author : Gerald Nelson 

   */

      
  


class DB_Access{    
    
    
                
  public static $CHARSET = 'utf8';
  public static $dbName  = 'befeni_test' ;
  public static $dbPass  = '' ;
  public static $dbUser  = 'root' ;
  public static $dbURL   = 'localhost' ;  
         
            
            // =========================================================== 
            // Constructor:
            //
            // ===========================================================
    
    
            

    
            /** @name initDB()
             * @desc DB Initialization method. Returns the connection variable.
             * 
             * @return <type>
             * 
             * @TODO Throw Error() on connecting to database server;
             */
            public static function initDB($WAIT_RETRY = TRUE){
                
               
                
                //Attempt MySQL Host Connection:
                $connection = mysqli_connect(DB_Access::$dbURL,DB_Access::$dbUser,DB_Access::$dbPass , DB_Access::$dbName);

                if(! $connection && $WAIT_RETRY === TRUE){   //If failed
                   
                        echo "<br/>Could not connect to server: ".DB_Access::$dbURL. " , " . DB_Access::$dbUser ." , " . date('r');
                        echo "<br/>Re-trying...";
                  
                  
                   
                }
                if (!$connection) {
                     
                        die('<br/>:: Error connecting to server:');
                        throw Exception('Error connecting to database server.');
                 }
                
                
                
                // special character support compatible 
				mysqli_set_charset($connection , 'utf8');
                
                return $connection;
            }

            
            /** @name issueQuery
             * 
             * @desc    Issue an SQL query. Users of this function MUST call closeDB() after finished issuing query (/query batch).
             * 
             * @param <type> $connection
             * @param <type> $query
             */
            public static function issueQuery($connection, $query){
                
                            
                            $result = mysqli_query($connection , $query);
                            if(!$result){
                                 
                                    echo '<br/><br/>Error issuing query: <br/>Query:'.$query.'<br/>';
                            
                                
                            }
                            
                       
                        return $result;
            }


            /** @name       fetchRow()
             * @desc        Fetch a row from the resultset. Perform an output check on data returned.
             *
             * @param <type> $result
             * @return <type> 
             */
            public static function fetchRow($result){

                

                $row = mysqli_fetch_array( $result);
               
                return $row;
            }
	
	        
            
            
            /** @name closeDB()
             * @desc DB Closing function. Pass the connection variable obtained through initDB().   
             *          
             * @param <type> $connection
             */
            public static function closeDB($connection){
                mysqli_close($connection);
            }

        }

?>
