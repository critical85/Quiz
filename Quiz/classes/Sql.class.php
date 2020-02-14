<?php

    class Sql extends Db{

    // parametr formats:    $table:     STRING
    //                      $input:     ASSOC ARRAY
    //                      $filter:    ASSOC ARRAY
    //                      $sorted_by: ARRAY
    //                      $id: ASSOC: ARRAY
    //                      $order:     STRING (optional)

    // fuctions for SQL queries
    // ************************************************************************** //
    public function insert_SQL($table, $input=[]){

        // create a query
        $sql = "INSERT INTO $table(";
        $i = 0;
        foreach($input as $key=>$value){
            if($i==0){
                $sql = $sql . "$key";
                $i ++;
            }else{
                $sql = $sql . ", $key";
            }
        }
        $sql = $sql . ") VALUES (";
        $i = 0;
        foreach($input as $key=>$value){
            if($i==0){
                $sql = $sql . "'$value'";
                $i++;
            }else{
                $sql = $sql . ", '$value'";
            }
        }       
        $sql = $sql . ")";

        // run the query        
        $stmt = $this->connect()->query($sql);
    }

    }

?>