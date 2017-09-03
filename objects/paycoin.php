<?php
class PayCoin extends Config {

    private $table_name = "PayCoin";

    public function __construct() {
		parent::__construct();
	}


    public function create () {
        //write query
			$query = "INSERT INTO
					" . $this->table_name . "
				SET
					username = ?, password = ?, name = ?, phone = ?, idcard = ?, idcar = ?, typecar = ?, seat = ?, coin = ?, status = ?, timelife = ?";

		$stmt = $this->conn->prepare($query);

		// posted values
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->idcard = htmlspecialchars(strip_tags($this->idcard));
        $this->idcar = htmlspecialchars(strip_tags($this->idcar));
        $this->typecar = htmlspecialchars(strip_tags($this->typecar));
        $this->seat = htmlspecialchars(strip_tags($this->seat));
        $this->coin = htmlspecialchars(strip_tags($this->coin));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->timelife = htmlspecialchars(strip_tags($this->timelife));

        // bind parameters
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->password);
        $stmt->bindParam(3, $this->name);
        $stmt->bindParam(4, $this->phone);
        $stmt->bindParam(5, $this->idcard);
        $stmt->bindParam(6, $this->idcar);
        $stmt->bindParam(7, $this->typecar);
        $stmt->bindParam(8, $this->seat);
        $stmt->bindParam(9, $this->coin);
        $stmt->bindParam(10, $this->status);
        $stmt->bindParam(11, $this->timelife);

        // execute the query
		if ($stmt->execute()) {
			return true;
		} else
			return false;
    }

	public function delete () {

		$query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

        // execute the query
		if ($result = $stmt->execute()) return true;
		else return false;
	}

    private function getTaxiUsername ($taxiID) {
        $query = "SELECT
				    username
				FROM
					Taxi
				WHERE id = ?
                LIMIT 0,1 ";

		$stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $taxiID);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['username'];
    }

    private function getTripInfo ($tripID) {
        $query = "SELECT
				    addressfrom, addressto, is_round
				FROM
					Trip
				WHERE id = ?
                LIMIT 0,1 ";

		$stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $tripID);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
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

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row['taxi_username'] = $this->getTaxiUsername($row['taxiID']);
            $row['taxi_username'] = '<a href="'.MAIN_URL.'/paycoin/'.$row['taxi_username'].'">'.$row['taxi_username'].'</a>';

            if ($row['type'] == 0) {
                $tripInfo = $this->getTripInfo($row['tripID']);
                $round = ($tripInfo['is_round'] == 1) ? '<i class="fa fa-exchange"></i>' : '<i class="fa fa-long-arrow-right"></i>';
                $row['tripID'] = '<a href="'.MAIN_URL.'/trip/'.$row['tripID'].'">'.$row['tripID'].'</a>: '.$tripInfo['addressfrom'].' '.$round.' '.$tripInfo['addressto'].' ';
            }

            if ($row['type'] == 0) $type = 'Mua chuyến';
            else if ($row['type'] == -1) $type = 'Trừ tiền do vi phạm';
            else if ($row['type'] == 1) $type = 'Cộng tiền';
            $row['type'] = $type;

        //    $row['taxiID'] = '<a href="'.$row[''].'"></a>';
            $this->all_list[] = $row;
        }
        return $this->all_list;
    }

    public function readAllOneTaxi () {
        $query = "SELECT
				    coin,time,details
				FROM
					" . $this->table_name . "
				WHERE taxiID = ?";

		$stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->taxiid);
		$stmt->execute();

		$this->all_list = array();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //    $row['username'] = '<a href="'.MAIN_URL.'/taxi/'.$row['username'].'"></a>';
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
            $this->name = $row['name'];
            $this->phone = $row['phone'];
            $this->idcard = $row['idcard'];
            $this->idcar = $row['idcar'];
            $this->typecar = $row['typecar'];
            $this->seat = $row['seat'];
            $this->coin = $row['coin'];
            $this->rank = $row['rank'];
            $this->timelife = $row['timelife'];
            $this->status = $row['status'];
            $this->idboss = $row['idboss'];
        }

        return ($row['id'] ? $row : null);
    }

}

 ?>
