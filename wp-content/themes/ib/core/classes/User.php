<?php 
	
	/**
	 * 
	 */
	class User {
		
		protected $pdo;

		function __construct($pdo) {
			$this->pdo = $pdo;
		} 

        // CREATE USER ACCOUNT
		public function create($userTable, $userInformation = []) {
			$columns = implode(",", array_keys($userInformation));
			$values = ":" . implode(", :", array_keys($userInformation)); 

			$sql = "INSERT INTO {$userTable} ({$columns}) VALUES ({$values})";

			if ($stmt = $this->pdo->prepare($sql)) {
				foreach ($userInformation as $key => $data) {
					$stmt->bindValue(":" . $key, $data);
				}

				$stmt->execute();
				return $this->pdo->lastInsertId();
			}
		}
	}
?> 