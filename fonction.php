<?php
function dbconnect(){
        static $connect = null;

        if($connect === null){
            $connect = mysqli_connect('localhost', 'root', '', 'employees');

            if(!$connect) {
                die('Erreur de connection à la base de données : ' . mysqli_connect());
            }

            mysqli_set_charset($connect, 'utf8mb4');
        }

        return $connect;
    }

function get_all_lines($sql){
    $req = mysqli_query(dbconnect(),$sql );
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;
}

function get_one_line($sql){
    $req = mysqli_query(dbconnect(),$sql );
    $result = mysqli_fetch_assoc($req);
    mysqli_free_result($req);
    return $result;
}

function get_dep(){
    $sql = "SELECT d.dept_no numero_departement,d.dept_name nom_departement,first_name Prenom,last_name Nom FROM departments d JOIN dept_manager dm ON d.dept_no = dm.dept_no JOIN employees e ON dm.emp_no = e.emp_no WHERE dm.to_date > CURDATE()";
    $result = mysqli_query(dbconnect(), $sql);
    return get_all_lines($sql);
}  
function get_liste($id){
    $sql = "SELECT d.dept_no numero_departement, d.dept_name nom_departement, e.emp_no id_employe, e.first_name Prenom, e.last_name Nom from dept_emp de join employees e on de.emp_no = e.emp_no JOIN departments d ON de.dept_no = d.dept_no where de.dept_no= '%s'";
    $sql = sprintf($sql, $id);
    $result = mysqli_query(dbconnect(), $sql);
    return get_all_lines($sql);
} 

function get_info_employe($id){
    $sql = "SELECT * FROM employees where emp_no = %s";
    $sql = sprintf($sql, $id);
    $result = mysqli_query(dbconnect(), $sql);
    return get_all_lines($sql);
} 

function get_info_salaire($id){
    $sql = "SELECT * FROM salaries s where s.emp_no = %s";
    $sql = sprintf($sql, $id);
    $result = mysqli_query(dbconnect(), $sql);
    return get_all_lines($sql);
} 



?>