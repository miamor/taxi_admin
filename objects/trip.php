<?php
class Trip extends Config {

    private $table_name = "Trip";

    public function __construct() {
		parent::__construct();
	}


    public function create () {
        //write query
		if ($this->prioritize && $this->coin) {
            $query = "INSERT INTO
					" . $this->table_name . "
				SET
					name = ?, addressfrom = ?, addressto = ?, PNR = ?, time = ?, seat = ?, price = ?, is_round = ?, details = ?, phone = ?, num_guess = ?, prioritize = ?, coin = ?";
        } else if ($this->prioritize) {
            $query = "INSERT INTO
					" . $this->table_name . "
				SET
					name = ?, addressfrom = ?, addressto = ?, PNR = ?, time = ?, seat = ?, price = ?, is_round = ?, details = ?, phone = ?, num_guess = ?, prioritize = ?";
        } else if ($this->coin) {
            $query = "INSERT INTO
					" . $this->table_name . "
				SET
					name = ?, addressfrom = ?, addressto = ?, PNR = ?, time = ?, seat = ?, price = ?, is_round = ?, details = ?, phone = ?, num_guess = ?, coin = ?";
        } else {
            $query = "INSERT INTO
					" . $this->table_name . "
				SET
					name = ?, addressfrom = ?, addressto = ?, PNR = ?, time = ?, seat = ?, price = ?, is_round = ?, details = ?, phone = ?, num_guess = ?";
        }

		$stmt = $this->conn->prepare($query);

		// posted values
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->from = htmlspecialchars(strip_tags($this->from));
        $this->to = htmlspecialchars(strip_tags($this->to));
        $this->PNR = htmlspecialchars(strip_tags($this->PNR));
        $this->time = htmlspecialchars(strip_tags($this->time));
        $this->seat = htmlspecialchars(strip_tags($this->seat));
        $this->coin = htmlspecialchars(strip_tags($this->coin));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->is_round = htmlspecialchars(strip_tags($this->is_round));
		$this->details = content($this->details);

        // bind parameters
		$stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->from);
        $stmt->bindParam(3, $this->to);
        $stmt->bindParam(4, $this->PNR);
        $stmt->bindParam(5, $this->time);
        $stmt->bindParam(6, $this->seat);
        $stmt->bindParam(7, $this->price);
        $stmt->bindParam(8, $this->is_round);
        $stmt->bindParam(9, $this->details);
        $stmt->bindParam(10, $this->phone);
        $stmt->bindParam(11, $this->num_guess);
        if ($this->prioritize && $this->coin) {
            $stmt->bindParam(12, $this->prioritize);
            $stmt->bindParam(13, $this->coin);
        } else if ($this->prioritize) {
            $stmt->bindParam(12, $this->prioritize);
        } else if ($this->coin) {
            $stmt->bindParam(12, $this->coin);
        }

        // execute the query
		if ($stmt->execute()) {
			return true;
		} else
			return false;
    }


    public function update () {

		$query = "UPDATE
					" . $this->table_name . "
				SET
					name = ?, phone = ?, addressfrom = ?, addressto = ?, PNR = ?, time = ?, seat = ?, coin = ?, price = ?, is_round = ?, details = ?, num_guess = ?, prioritize = ?
				WHERE
					id = ?";

		$stmt = $this->conn->prepare($query);

        // posted values
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->from = htmlspecialchars(strip_tags($this->from));
        $this->to = htmlspecialchars(strip_tags($this->to));
        $this->PNR = htmlspecialchars(strip_tags($this->PNR));
        $this->time = htmlspecialchars(strip_tags($this->time));
        $this->seat = htmlspecialchars(strip_tags($this->seat));
        $this->coin = htmlspecialchars(strip_tags($this->coin));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->is_round = htmlspecialchars(strip_tags($this->is_round));
		$this->details = content($this->details);

        // bind parameters
		$stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->phone);
        $stmt->bindParam(3, $this->from);
        $stmt->bindParam(4, $this->to);
        $stmt->bindParam(5, $this->PNR);
        $stmt->bindParam(6, $this->time);
        $stmt->bindParam(7, $this->seat);
        $stmt->bindParam(8, $this->coin);
        $stmt->bindParam(9, $this->price);
        $stmt->bindParam(10, $this->is_round);
        $stmt->bindParam(11, $this->details);
        $stmt->bindParam(12, $this->num_guess);
        $stmt->bindParam(13, $this->prioritize);
        $stmt->bindParam(14, $this->id);

		// execute the query
		if ($stmt->execute()) return true;
		else return false;
	}


	public function delete () {

		$query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

        // execute the query
		if ($result = $stmt->execute()) return true;
		else return false;
	}


    public function readAll () {
        $cond = '';
        $query = "SELECT
					*
				FROM
					" . $this->table_name . "
				{$cond}";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		$this->all_list = array();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row['id'] = '<a href="'.MAIN_URL.'/trip/'.$row['id'].'">'.$row['id'].'</a>';
            unset($row['details']);
            unset($row['rank']);
            $row['status'] = ($row['status'] == 1) ? 'Đã nhận' : 'Chưa nhận';
            $row['is_round'] = ($row['is_round'] == 1) ? 'Hai chiều' : 'Một chiều';
            $this->all_list[] = $row;
        }
        return $this->all_list;
    }

    public function readOne () {
        $query = "SELECT
					*
				FROM
					" . $this->table_name . "
				WHERE id = ?";
        $stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values
		$this->id = $row['id'];
        $this->name = $row['name'];
        $this->phone = $row['phone'];
        $this->addressfrom = $row['addressfrom'];
        $this->addressto = $row['addressto'];
        $this->time = $row['time'];
        $this->seat = $row['seat'];
        $this->PNR = $row['PNR'];
        $this->price = $row['price'];
        $this->coin = $row['coin'];
        $this->is_round = $row['is_round'];
        $this->details = $row['details'];
        $this->userid = $row['userid'];
        $this->num_guess = $row['num_guess'];
        $this->prioritize = $row['prioritize'];

        return ($row['id'] ? $row : null);
    }

}

 ?>
