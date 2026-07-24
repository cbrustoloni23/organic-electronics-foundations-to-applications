<?php
namespace Phppot;

class Member
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';

        $this->ds = new DataSource();
    }

    public function isMemberExists($email)
    {
        $query = 'SELECT * FROM tbl_member where email = ?';
        $paramType = 's';
        $paramValue = array(
	    $email
        );
        $insertRecord = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($insertRecord)) {
            $count = count($insertRecord);
        }
        return $count;
    }

    public function registerMember()
    {
        $result = $this->isMemberExists($_POST["email"]);
        if ($result < 1) {
            if (! empty($_POST["signup-password"])) {
                $hashedPassword = password_hash($_POST["signup-password"], PASSWORD_DEFAULT);
            }
            $query = 'INSERT INTO tbl_member (username, name, instit, dept, password, email) VALUES (?, ?, ?, ?, ?, ?)';
            $paramType = 'ssssss';
            $paramValue = array(
                $_POST["username"],
		$_POST["name"],
		$_POST["instit"],
		$_POST["dept"],
                $hashedPassword,
                $_POST["email"]
            );
            $memberId = $this->ds->insert($query, $paramType, $paramValue);
            if(!empty($memberId)) {
                $response = array("status" => "success", "message" => "You have registered successfully.");
            }
        } else if ($result == 1) {
            $response = array("status" => "error", "message" => "Email already exists.");
        }
        return $response;
    }

    public function getMember($username)
    {
        $query = 'SELECT * FROM tbl_member where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $loginUser = $this->ds->select($query, $paramType, $paramValue);
        return $loginUser;
    }

    public function loginMember()
{
    $username = $_POST["username"] ?? "";
    $password = $_POST["signup-password"] ?? "";

    if (empty($username) || empty($password)) {
        return "Invalid username or password.";
    }

    $loginUserResult = $this->getMember($username);

    if (empty($loginUserResult) || !isset($loginUserResult[0]["password"])) {
        return "Invalid username or password.";
    }

    $hashedPassword = $loginUserResult[0]["password"];

    if (password_verify($password, $hashedPassword)) {
        $_SESSION["username"] = $loginUserResult[0]["username"];

        header("Location: ./home.php");
        exit;
    }

    return "Invalid username or password.";
}
}
