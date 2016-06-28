<?php

namespace inc\model;

class Categorie {
	private $id;
	private $nom;

	public function __construct($id, $nom='') {
		$this->id = $id;
		$this->nom = $nom;
	}

	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}

	public static function getById($id) {
		global $pdo;

		$sql = '
			SELECT cat_id, cat_nom
			FROM categorie
			WHERE cat_id = '.intval($id);
		$pdoStatement = $pdo->query($sql);

		if ($pdoStatement && $pdoStatement->rowCount() > 0) {
			$res = $pdoStatement->fetch();

			// Je crée l'objet
			$categorie = new Categorie($res['cat_id'], $res['cat_nom']);
			// Puis je le retourne
			return $categorie;
		}

		return false;
	}
}