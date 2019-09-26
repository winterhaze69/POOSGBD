<?php
const DBName = 'mysql:dbname=test';

class Player implements Fightable
{
   /* Member variables */
   protected $class;
   protected $life;
   protected $name;
   protected $atk;
   protected $ki;


   /* Member functions */
   function setAtk($par)
   {
      $this->atk = $par;
   }
   function getAtk(): ?int
   {
      return $this->atk;
  }
  function setKi($par)
  {
     $this->ki = $par;
  }
  function getKi(): ?string
  {
     return $this->ki;
 }
   function setClass($par)
   {
      $this->class = $par;
   }
   function getClass(): ?int
   {
      return $this->class;
  }
   function setLife($par)
   {
      $this->life = $par;
   }
   function getLife(): ?int
   {
      return $this->life;
   }
   function setName($par)
   {
      $this->name = $par;
   }
   function getName(): ?string
   {
      return $this->name;
   }
//insert db when new
  function __construct($class, $life, $name, $atk, $ki)
  {

     $this->setLife($life);
     $this->setName($name);
     $this->setAtk($atk);
     $this->setKi($ki);

 $connec = new PDO(DBName, 'root', '0000');
 $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $request = $connec->prepare('INSERT INTO characters (name, health, power, ki, role_id) VALUES (:name, :health, :power, :ki, :role_id)');
 $request->execute([
   ":name" => $name,
   ":health" => $life,
   ":power" => $atk,
   ":ki" => $ki,
   ":role_id" => $class
 ]);

   }

//CRUD FUNCTIONS WITHOUT 'CREATE' BECAUSE ALREADY DONE IN CONSTRUCT ABOVE.

   function getAllUsers() {
     $request = '
     SELECT *
     FROM  characters
     ';
     $connec = new PDO( DBName, 'root', '0000');
     $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $request = $connec->prepare($request);
     $request->execute();
     return $request->fetchAll();
   }

   function getRoles($id) {
     $request = '
     SELECT name
     FROM  roles
     WHERE id = :id
     ';
     $connec = new PDO(DBName, 'root', '0000');
     $request = $connec->prepare($request);
     $request->bindParam(':id', $id);
     $request->execute();
     return $request->fetch(PDO::FETCH_ASSOC);
   }

   function deleteOneChar($id) {
     $connec = new PDO(DBName, 'root', '0000');
     $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $request = $connec->prepare('DELETE FROM characters WHERE id = :id');
     $request->execute([
       ":id" => $id,
     ]);
   }

   function updateChar($name, $id){
     $connec = new PDO(DBName, 'root', '0000');
     $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $request= $connec->prepare("UPDATE characters SET name = :name WHERE id = :id ");
     $request->bindParam(':name', $name);
     $request->bindParam(':id', $id);
     $request->execute();
 return;
   }

   public function fight($target)
  {
    //interface implémenté depuis Figtable.php éxiste aussi sur Player mais non utilisé car pas de systeme de fight ATM
  }
}
