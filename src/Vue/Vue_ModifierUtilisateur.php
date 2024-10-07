<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_ModifierUtilisateur extends Vue_Composant
{

    private string $msgErreur;
    private mixed $data;

    public function __construct( mixed $data, string $msgErreur ="")
    {
        $this->data=$data;
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
        <h1>Modifier un utilisateur</h1>
        <div  style='    width: 50%;    display: block;    margin: auto;'> 
        <form>
            <table> 
                <tr> <td>id</td><td> ".$this->data["id"]." </td> </tr>
                <tr>    <td>pseudo</td><td> <input type='text' name='pseudo' value='{$this->data["pseudo"]}'> </td></tr>
            
                 <tr>    <td>nom</td><td> <input type='text' name='nom' value='{$this->data["nom"]}'> </td></tr>
                <tr>     <td>prenom</td> <td> <input type='text' name='prenom' value='{$this->data["prenom"]}'> </td></tr>
                <tr>     <td>mot de passe</td> <td> <input type='text' name='motDePasse' value='{$this->data["motDePasse"]}'> </td></tr>
            </table>
            <input type='hidden' name='case' value ='utilisateur'>
            <input type='hidden' name='id' value ='{$this->data["id"]}'>
            <button type='submit' name = 'action' value='enregistrerModifier'> Modifier !!</button>
            </form>
        </div>
        $this->msgErreur
        ";
        return $str ;
    }
}