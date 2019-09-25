<?php 

    namespace Repository;

    require_once("..\Config\Autoload.php");
    use Config\Autoload as Autoload;
    Autoload::Start();

    use Repository\IUser as IUser;
    use Models\User as User;

    class userRepository implements IUser
    {
        private $userList;

        function add(User $user)
        {
            $this->retrieveData();
            array_push($this->userList, $user);
            $this->saveData();
        }

        function getAll()
        {
            $this->retrieveData();
            return $this->userList;
        }

        function getByName($name)
        {
            $user = null;

            $this->retrieveData();
            foreach($this->userList as $value)
            {
                if($value->getUserName() == $name)
                {
                    $user = $value;
                }
            }
            return $user;
        }
        
        private function GetJsonFilePath()
        {
            $initialPath = "Data/users.json";

            if(file_exists($initialPath))
            {
                $jsonFilePath = $initialPath;
            }else{
                $jsonFilePath = "../" . $initialPath;
            }

            return $jsonFilePath;
        }

        private function saveData()
        {
            $arrayToEncode = array();

            foreach($this->userList as $user)
            {
                $valuesArray['userName'] = $user->getUserName();
                $valuesArray['password'] = $user->getPassword();
                $valuesArray['firstName'] = $user->getFirstName();
                $valuesArray['lastName'] = $user->getLastName();
                $valuesArray['dni'] = $user->getDni();
                $valuesArray['email'] = $user->getEmail();

                array_push($arrayToEncode, $valuesArray);

                $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
                file_put_contents($this->GetJsonFilePath(), $jsonContent);                
            }
        }

        private function retrieveData()
        {
            $this->userList = array();

            $jsonContent = file_get_contents($this->GetJsonFilePath());

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $user = new User();
                $user->setUserName($valuesArray['userName']);
                $user->setPassword($valuesArray['password']);
                $user->setFirstName($valuesArray['firstName']);
                $user->setLastName($valuesArray['lastName']);
                $user->setDni($valuesArray['dni']);
                $user->setEmail($valuesArray['email']);

                array_push($this->userList, $user);
            }
        }
    }
?>