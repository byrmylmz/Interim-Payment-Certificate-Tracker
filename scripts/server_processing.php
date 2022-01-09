    <?php
    
    /*
    * DataTables example server-side processing script.
    *
    * Please note that this script is intentionally extremely simple to show how
    * server-side processing can be implemented, and probably shouldn't be used as
    * the basis for a large complex system. It is suitable for simple use cases as
    * for learning.
    *
    * See http://datatables.net/usage/server-side for full details on the server-
    * side processing requirements of DataTables.
    *
    * @license MIT - http://datatables.net/license_mit
    */
    
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * Easy set variables
    */
    
    // DB table to use
    $table = 'subcontractors';
    
    // Table's primary key
    $primaryKey = 'id';
    
    // Array of database columns which should be read and sent back to DataTables.
    // The `db` parameter represents the column name in the database, while the `dt`
    // parameter represents the DataTables column identifier. In this case simple
    // indexes
    $columns = array(
        array( 'db' => 'id', 'dt' => 0 ),
        array( 'db' => 'Let',  'dt' => 1 ),
        array( 'db' => 'DCC_time',   'dt' => 2 ),
        array( 'db' => 'Subcontractor_name',     'dt' => 3,'formatter'=>function($d,$row){
            $name="<a href='dashboard.php?Git=IPCstatus&id={$row[0]}' target='_blank'>$row[3]</a>";
            return $name;
        }),
        array( 'db' => 'Contract_no',     'dt' => 4 ),
        array( 'db' => 'Scope',     'dt' => 5 ),
        array( 'db' => 'IPC_no',     'dt' => 6 ),
        array( 'db' => 'IPC_Month',     'dt' => 7 ),
        array( 'db' => 'id',     'dt' => 8, 'formatter'=>function($d, $row){
            $buton=" 
                    <a href='dashboard.php?Git=update&id={$d}' target='_blank' style='margin-right:5px;'>
                    <svg width='1.25em' height='1.25em' viewBox='0 0 16 16' class='bi bi-pencil-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                    </svg>
                    </a>

                    <a href='ipc-log.php?Git=log_form&id={$d}' target='_blank'>
                    <svg width='1.25em' height='1.25em' viewBox='0 0 16 16' class='bi bi-cash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                    <path fill-rule='evenodd' d='M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z'/>
                    <path d='M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z'/>
                    </svg>
                    </a>            
            ";
            return $buton;
        }),
        // array(
        //     'db'        => 'ipc_period_start_date',
        //     'dt'        => 4,
        //     'formatter' => function( $d, $row ) {
        //         return $d;
        //     }
        // ),
        // array(
        //     'db'        => 'IPC_Year',
        //     'dt'        => 5,
        //     'formatter' => function( $d, $row ) {
        //         return '$'.number_format($d);
        //     }
        // )
    );
    
    // SQL server connection information
    $sql_details = array(
        'user' => 'root',
        'pass' => '',
        'db'   => 'proje_2',
        'host' => '127.0.0.1'
    );
    
    
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    * If you just want to use the basic configuration for DataTables with PHP
    * server-side, there is no need to edit below this line.
    */
    
    require( 'ssp.class.php' );
    
    echo json_encode(
        SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
    );