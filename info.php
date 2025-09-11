<?PHP
if( $_SERVER["REQUEST_METHOD"]== "POST"){
    if(isset($_REQUEST["mssv"])){
        $mssv=$_REQUEST["mssv"];
    }
    print_r(value: $mssv);
    print_r(value:$hoten);
}

?>