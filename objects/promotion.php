<?php
class Promotion extends Config {

    private $table_name = "Promotion";

    public function __construct() {
		parent::__construct();
	}


    public function create () {
        //write query
			$query = "INSERT INTO
					" . $this->table_name . "
				SET
					userID = ?, timeFrom = ?, timeTo = ?, details = ?, status = True";

		$stmt = $this->conn->prepare($query);

		// posted values
	$this->userID = htmlspecialchars(strip_tags($this->userID));
        $this->timeFrom = htmlspecialchars(strip_tags($this->timeFrom));
	$this->timeTo = htmlspecialchars(strip_tags($this->timeTo));
	$this->details = htmlspecialchars(strip_tags($this->details));

        // bind parameters
        $stmt->bindParam(1, $this->userID);
        $stmt->bindParam(2, $this->timeFrom);
	$stmt->bindParam(3, $this->timeTo);
        $stmt->bindParam(4, $this->details);

        // execute the query
		if ($stmt->execute()) {
			return true;
		} else
			return false;
    }

    public function getUserUsername ($userID) {
        $query = "SELECT
				    username
				FROM
					User
				WHERE id = ?
                LIMIT 0,1 ";

		$stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $userID);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['username'];
    }

    public function readAll () {
        $query = "SELECT
				    *
				FROM
					" . $this->table_name . "
				";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$this->all_list = array();

	//echo $query.'~';
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//		print_r($row);
            $row['user_username'] = $this->getUserUsername($row['userID']);
            $row['user_username'] = '<a href="'.MAIN_URL.'/promotion/'.$row['user_username'].'">'.$row['user_username'].'</a>';
            $this->all_list[] = $row;
        }
        return $this->all_list;
    }

    public function readAllOneUser () {
        $query = "SELECT
				    timeFrom,timeTo,details,status
				FROM
					" . $this->table_name . "
				WHERE userID = ?";

		$stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->userID);
		$stmt->execute();

		$this->all_list = array();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//            $row['username'] = '<a href="'.MAIN_URL.'/user/'.$row['username'].'"></a>';
            $this->all_list[] = $row;
        }
        return $this->all_list;
    }

    public function readOne () {
        $query = "SELECT
					*
				FROM
					" . $this->table_name . "
				WHERE username = ?";
        $stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->username);

		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values
        if ($row['id']) {
            $this->id = $row['id'];
            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->name = $row['name'];
            $this->phone = $row['phone'];
            $this->address = $row['address'];
            $this->rank = $row['rank'];
        }

        return ($row['id'] ? $row : null);
    }

}

 ?>
