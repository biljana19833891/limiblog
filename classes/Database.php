<?php
	class Database {
		private static $connection = null;

		private $pdo,
				$query,
				$results,
				$error = false,
				$count = 0;

		private function __construct() {
			try {
				$this->pdo = new PDO(Config::DB_SOURCE, Config::DB_USER, Config::DB_PASS);
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}
		
		public static function connect() {
			if(!isset(self::$connection)) {
				self::$connection = new Database();
			}
			return self::$connection;
		}
		//$params = ['ivan'
		public function query($sql, $params = []) {
			$this->error = false;
			$this->query = $this->pdo->prepare($sql);
			
			if ($this->query) {
                if (count($params)) {
                    $i = 1;
                    foreach($params as $param) {
                        $this->query->bindValue($i, $param);
                        $i++;
                    }
                }
            }
			
			if($this->query->execute()){
				$this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
				$this->count = $this->query->rowCount();
			} else {
				$this->error = true;
			}
		
			return $this;
		}
		
		public function results() {
            return $this->results;
        }

        public function count() {
            return $this->count;
        }

        public function first() {
            if (!empty($this->results)) {
                return $this->results()[0];
            }
            return null;
        }

        public function delete($table, $id) {
            $sql = "DELETE FROM {$table} WHERE id = ?";
            $this->query($sql, [$id]);
            if (!$this->error) {
                return true;
            }
            return false;
        }

	}







