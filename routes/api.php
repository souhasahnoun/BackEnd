<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::get('fournisseurs', 'FournisseurController@index');
Route::put('fournisseurs/{fournisseur}/archiver', 'FournisseurController@archiver');
Route::put('fournisseurs/{fournisseur}/desarchiver', 'FournisseurController@desarchiver');
Route::get('fournisseurs/{id}', 'FournisseurController@show');
Route::post('fournisseurs', 'FournisseurController@store');
Route::put('fournisseurs/{id}', 'FournisseurController@update');
Route::delete('fournisseurs/{id}', 'FournisseurController@destroy');

Route::get('clients', 'ClientController@index');
Route::put('clients/{client}/archiver', 'ClientController@archiver');
Route::put('clients/{client}/desarchiver', 'ClientController@desarchiver');
Route::get('clients/{id}', 'ClientController@show');
Route::post('clients', 'ClientController@store');
Route::put('clients/{id}', 'ClientController@update');
Route::delete('clients/{id}', 'ClientController@destroy');

Route::get('marques', 'MarqueController@index');
Route::put('marques/{marque}/archiver', 'MarqueController@archiver');
Route::put('marques/{marque}/desarchiver', 'MarqueController@desarchiver');
Route::get('marques/search', 'MarqueController@search');
Route::get('marques/{id}', 'MarqueController@show');
Route::post('marques', 'MarqueController@store');
Route::put('marques/{id}', 'MarqueController@update');
Route::delete('marques/{id}', 'MarqueController@destroy');

Route::get('categories', 'CategorieController@index');
Route::put('categories/{categorie}/archiver', 'CategorieController@archiver');
Route::put('categories/{categorie}/desarchiver', 'CategorieController@desarchiver');
Route::get('categories/search', 'CategorieController@search');
Route::get('categories/{id}', 'CategorieController@show');
Route::post('categories', 'CategorieController@store');
Route::put('categories/{id}', 'CategorieController@update');
Route::delete('categories/{id}', 'CategorieController@destroy');


Route::get('tvas', 'TvaController@index');
Route::get('tvas/{id}', 'TvaController@show');
Route::post('tvas', 'TvaController@store');
Route::put('tvas/{id}', 'TvaController@update');
Route::delete('tvas/{id}', 'TvaController@destroy');

Route::get('regions', 'RegionController@index');
Route::get('regions/{id}', 'RegionController@show');
Route::post('regions', 'RegionController@store');
Route::put('regions/{id}', 'RegionController@update');
Route::delete('regions/{id}', 'RegionController@destroy');

Route::get('banques', 'BanqueController@index');
Route::get('banques/{id}', 'BanqueController@show');
Route::post('banques', 'BanqueController@store');
Route::put('banques/{id}', 'BanqueController@update');
Route::delete('banques/{id}', 'BanqueController@destroy');


Route::get('ordrePaiements', 'OrdrePaiementController@index');
Route::get('ordrePaiements/search', 'OrdrePaiementController@search');
Route::get('ordrePaiements/{id}', 'OrdrePaiementController@show');
Route::post('ordrePaiements', 'OrdrePaiementController@store');
Route::put('ordrePaiements/{id}', 'OrdrePaiementController@update');
Route::delete('ordrePaiements/{id}', 'OrdrePaiementController@destroy');

Route::get('magasins', 'MagasinController@index');
Route::get('magasins/{id}', 'MagasinController@show');
Route::post('magasins', 'MagasinController@store');
Route::put('magasins/{id}', 'MagasinController@update');
Route::delete('magasins/{id}', 'MagasinController@destroy');

Route::get('societes', 'SocieteController@index');
Route::get('societes/{id}', 'SocieteController@show');
Route::post('societes', 'SocieteController@store');
Route::put('societes/{id}', 'SocieteController@update');
Route::delete('societes/{id}', 'SocieteController@destroy');

Route::get('garenties', 'GarentieController@index');
Route::get('garenties/{id}', 'GarentieController@show');
Route::get('garenties/search', 'GarentieController@search');
Route::post('garenties', 'GarentieController@store');
Route::put('garenties/{id}', 'GarentieController@update');
Route::delete('garenties/{id}', 'GarentieController@destroy');

Route::get('casiers', 'CasierController@index');
Route::get('casiers/{id}', 'CasierController@show');
Route::post('casiers', 'CasierController@store');
Route::put('casiers/{id}', 'CasierController@update');
Route::delete('casiers/{id}', 'CasierController@destroy');

Route::get('codes', 'CodeController@index');
Route::get('codes/{id}', 'CodeController@show');
Route::post('codes', 'CodeController@store');
Route::put('codes/{id}', 'CodeController@update');
Route::delete('codes/{id}', 'CodeController@destroy');

Route::get('utilisateurs', 'UtilisateurController@index');
Route::get('utilisateurs/{id}', 'UtilisateurController@show');
Route::post('utilisateurs', 'UtilisateurController@store');
Route::put('utilisateurs/{id}', 'UtilisateurController@update');
Route::delete('utilisateurs/{id}', 'UtilisateurController@destroy');

Route::get('personels', 'PersonnelController@index');
Route::get('personels/{id}', 'Personnelontroller@show');
Route::post('personels', 'PersonnelController@store');
Route::put('personels/{id}', 'PersonnelController@update');
Route::delete('personels/{id}', 'PersonnelController@destroy');

Route::get('paiementpersonels', 'PaiementpersonnelController@index');
Route::get('paiementpersonels/search', 'PaiementpersonnelController@search');
Route::get('paiementpersonels/{id}', 'PaiementpersonnelController@show');
Route::post('paiementpersonels', 'PaiementpersonnelController@store');
Route::put('paiementpersonels/{id}', 'PaiementpersonnelController@update');
Route::delete('paiementpersonels/{id}', 'PaiementpersonnelController@destroy');


Route::get('tickets', 'TicketController@index');
Route::get('tickets/search', 'TicketController@search');
Route::get('tickets/{id}', 'TicketController@show');
Route::post('tickets', 'TicketController@store');
Route::put('tickets/{id}', 'TicketController@update');
Route::delete('tickets/{id}', 'TicketController@destroy');


Route::get('caisses', 'CaisseController@index');
Route::get('caisses/search', 'CaisseController@search');
Route::get('caisses/{id}', 'CaisseController@show');
Route::post('caisses', 'CaisseController@store');
Route::put('caisses/{id}', 'CaisseController@update');
Route::delete('caisses/{id}', 'CaisseController@destroy');

Route::get('entreecaisses', 'EntreecaisseController@index');
Route::get('entreecaisses/{id}', 'EntreecaisseController@show');
Route::get('entreecaisses/search', 'EntreecaisseController@search');
Route::post('entreecaisses', 'EntreecaisseController@store');
Route::put('entreecaisses/{id}', 'EntreecaisseController@update');
Route::delete('entreecaisses/{id}', 'EntreecaisseController@destroy');



Route::get('depenses', 'DepenseController@index');
Route::get('depenses/search', 'DepenseController@search');
Route::get('depenses/{id}', 'DepenseController@show');
Route::post('depenses', 'DepenseController@store');
Route::put('depenses/{id}', 'DepenseController@update');
Route::delete('depenses/{id}', 'DepenseController@destroy');

Route::get('lignetickets', 'LigneticketController@index');
Route::get('lignetickets/{id}', 'LigneticketController@show');
Route::post('lignetickets', 'LigneticketController@store');
Route::put('lignetickets/{id}', 'LigneticketController@update');
Route::delete('lignetickets/{id}', 'LigneticketController@destroy');


Route::get('familles', 'FamilleController@index');
Route::put('familles/{famille}/archiver', 'FamilleController@archiver');
Route::put('familles/{famille}/desarchiver', 'FamilleController@desarchiver');
Route::get('familles/search', 'FamilleController@search');
Route::get('familles/{id}', 'FamilleController@show');
Route::post('familles', 'FamilleController@store');
Route::put('familles/{id}', 'FamilleController@update');
Route::delete('familles/{id}', 'FamilleController@destroy');

Route::get('receptions', 'ReceptionController@index');
Route::get('receptions/search', 'ReceptionController@search');
Route::get('receptions/{id}', 'ReceptionController@show');
Route::post('receptions', 'ReceptionController@store');
Route::put('receptions/{id}', 'ReceptionController@update');
Route::delete('receptions/{id}', 'ReceptionController@destroy');

Route::get('souches', 'SoucheController@index');
Route::put('souches/{souche}/archiver', 'SoucheController@archiver');
Route::put('souches/{souche}/desarchiver', 'SoucheController@desarchiver');
Route::get('souches/{id}', 'SoucheController@show');
Route::post('souches', 'SoucheController@store');
Route::put('souches/{id}', 'SoucheController@update');
Route::delete('souches/{id}', 'SoucheController@destroy');

Route::get('produits', 'ProduitController@index');
Route::put('produits/{produit}/archiver', 'ProduitController@archiver');
Route::put('produits/{produit}/desarchiver', 'ProduitController@desarchiver');

Route::get('produits/search', 'ProduitController@search');
Route::get('produits/{id}', 'ProduitController@show');
Route::post('produits', 'ProduitController@store');
Route::put('produits/{id}', 'ProduitController@update');
Route::delete('produits/{id}', 'ProduitController@destroy');
Route::get('produits/loadByIds/{ids}', 'ProduitController@loadByIds');

Route::get('inventaires', 'InventaireController@index');
Route::get('inventaires/search', 'InventaireController@search');
Route::get('inventaires/{id}', 'InventaireController@show');
Route::post('inventaires', 'InventaireController@store');
Route::put('inventaires/{id}', 'InventaireController@update');
Route::delete('inventaires/{id}', 'InventaireController@destroy');

Route::get('tracabilitestocks', 'TracabilitestockController@index');
Route::get('tracabilitestocks/{id}', 'TracabilitestockController@show');
Route::post('tracabilitestocks', 'TracabilitestockController@store');
Route::put('tracabilitestocks/{id}', 'TracabilitestockController@update');
Route::delete('tracabilitestocks/{id}', 'TracabilitestockController@destroy');


Route::get('bordereaux', 'BordereauController@index');
Route::get('bordereaux/search', 'BordereauController@search');
Route::get('bordereaux/{id}', 'BordereauController@show');
Route::post('bordereaux', 'BordereauController@store');
Route::put('bordereaux/{id}', 'BordereauController@update');
Route::delete('bordereaux/{id}', 'BordereauController@destroy');


Route::get('tracabilites', 'TracabiliteController@index');
Route::get('tracabilites/search', 'TracabiliteController@search');
Route::get('tracabilites/{id}', 'TracabiliteController@show');
Route::post('tracabilites', 'TracabiliteController@store');
Route::put('tracabilites/{id}', 'TracabiliteController@update');
Route::delete('tracabilites/{id}', 'TracabiliteController@destroy');

Route::get('droits', 'DroitController@index');
Route::get('droits/{id}', 'DroitController@show');
Route::post('droits', 'DroitController@store');
Route::put('droits/{id}', 'DroitController@update');
Route::delete('droits/{id}', 'DroitController@destroy');

Route::get('categ_droits', 'CatgdroitController@index');
Route::get('categ_droits/{id}', 'CatgdroitController@show');
Route::post('categ_droits', 'CatgdroitController@store');
Route::put('categ_droits/{id}', 'CatgdroitController@update');
Route::delete('categ_droits/{id}', 'CatgdroitController@destroy');


Route::get('stocks', 'StockController@index');
Route::get('stocks/search', 'StockController@search');
Route::get('stocks/{id}', 'StockController@show');
Route::post('stocks', 'StockController@store');
Route::put('stocks/{id}', 'StockController@update');
Route::delete('stocks/{id}', 'StockController@destroy');


Route::get('documents', 'DocumentController@index');
Route::get('documents/search', 'DocumentController@search');
Route::put('documents/{document}/archiver', 'DocumentController@archiver');
Route::put('documents/{document}/desarchiver', 'DocumentController@desarchiver');
Route::get('documents/imprimer', 'DocumentController@imprimer');
Route::get('documents/{id}', 'DocumentController@show');
Route::post('documents', 'DocumentController@store');
Route::put('documents/{id}', 'DocumentController@update');
Route::delete('documents/{id}', 'DocumentController@destroy');

Route::get('paiementfrs', 'PaiementfrController@index');
Route::get('paiementfrs/search', 'PaiementfrController@search');
Route::get('paiementfrs/{id}', 'PaiementfrController@show');
Route::post('paiementfrs', 'PaiementfrController@store');
Route::put('paiementfrs/{id}', 'PaiementfrController@update');
Route::delete('paiementfrs/{id}', 'PaiementfrController@destroy');


Route::get('reglementclts', 'ReglementclController@index');
Route::get('reglementclts/search', 'ReglementclController@search');
Route::get('reglementclts/{id}', 'ReglementclController@show');
Route::post('reglementclts', 'ReglementclController@store');
Route::put('reglementclts/{id}', 'ReglementclController@update');
Route::delete('reglementclts/{id}', 'ReglementclController@destroy');


Route::get('access', 'AcceController@index');
Route::get('access/{id}', 'AcceController@show');
Route::post('access', 'AcceController@store');
Route::put('access/{id}', 'AcceController@update');
Route::delete('access/{id}', 'AcceController@destroy');



Route::get('lignepaiements', 'LignepaiementController@index');
Route::get('lignepaiements/{id}', 'LignepaiementController@show');
Route::post('lignepaiements', 'LignepaiementController@store');
Route::put('lignepaiements/{id}', 'LignepaiementController@update');
Route::delete('lignepaiements/{id}', 'LignepaiementController@destroy');




Route::get('lignereglements', 'LignereglementController@index');
Route::get('lignereglements/{id}', 'LignereglementController@show');
Route::post('lignereglements', 'LignereglementController@store');
Route::put('lignereglements/{id}', 'LignereglementController@update');
Route::delete('lignereglements/{id}', 'LignereglementController@destroy');





Route::get('lignebordereaux', 'LignebordereauController@index');
Route::get('lignebordereaux/{id}', 'LignebordereauController@show');
Route::post('lignebordereaux', 'LignebordereauController@store');
Route::put('lignebordereaux/{id}', 'LignebordereauController@update');
Route::delete('lignebordereaux/{id}', 'LignebordereauController@destroy');



Route::get('rsfs', 'RsfrController@index');
Route::get('rsfs/search', 'RsfrController@search');
Route::get('rsfs/{id}', 'RsfrController@show');
Route::post('rsfs', 'RsfrController@store');
Route::put('rsfs/{id}', 'RsfrController@update');
Route::delete('rsfs/{id}', 'RsfrController@destroy');

Route::get('rscs', 'RsclController@index');
Route::get('rscs/search', 'RsclController@search');
Route::get('rscs/{id}', 'RsclController@show');
Route::post('rscs', 'RsclController@store');
Route::put('rscs/{id}', 'RsclController@update');
Route::delete('rscs/{id}', 'RsclController@destroy');


Route::get('lignedocuments', 'LignedocumentController@index');
Route::get('lignedocuments/{id}', 'LignedocumentController@show');
Route::post('lignedocuments', 'LignedocumentController@store');
Route::put('lignedocuments/{id}', 'LignedocumentController@update');
Route::delete('lignedocuments/{id}', 'LignedocumentController@destroy');

Route::get('factavoirfrs', 'FactavoirfournisseurController@index');
Route::get('factavoirfrs/{id}', 'FactavoirfournisseurController@show');
Route::post('factavoirfrs', 'FactavoirfournisseurController@store');
Route::put('factavoirfrs/{id}', 'FactavoirfournisseurController@update');
Route::delete('factavoirfrs/{id}', 'FactavoirfournisseurController@destroy');

Route::get('factavoirclts', 'FactavoirclientController@index');
Route::get('factavoirclts/{id}', 'FactavoirclientController@show');
Route::post('factavoirclts', 'FactavoirclientController@store');
Route::put('factavoirclts/{id}', 'FactavoirclientController@update');
Route::delete('factavoirclts/{id}', 'FactavoirclientController@destroy');

Route::get('brfrs', 'BrfournisseurController@index');
Route::get('brfrs/{id}', 'BrfournisseurController@show');
Route::post('brfrs', 'BrfournisseurController@store');
Route::put('brfrs/{id}', 'BrfournisseurController@update');
Route::delete('brfrs/{id}', 'BrfournisseurController@destroy');


Route::get('befrs', 'BefournisseurController@index');
Route::get('befrs/{id}', 'BefournisseurController@show');
Route::post('befrs', 'BefournisseurController@store');
Route::put('befrs/{id}', 'BefournisseurController@update');
Route::delete('befrs/{id}', 'BefournisseurController@destroy');


Route::get('bcfrs', 'BcfournisseurController@index');
Route::get('bcfrs/{id}', 'BcfournisseurController@show');
Route::post('bcfrs', 'BcfournisseurController@store');
Route::put('bcfrs/{id}', 'BcfournisseurController@update');
Route::delete('bcfrs/{id}', 'BcfournisseurController@destroy');



Route::get('facturefrs', 'FacturefournisseurController@index');
Route::get('facturefrs/{id}', 'FacturefournisseurController@show');
Route::post('facturefrs', 'FacturefournisseurController@store');
Route::put('facturefrs/{id}', 'FacturefournisseurController@update');
Route::delete('facturefrs/{id}', 'FacturefournisseurController@destroy');


Route::get('factureclts', 'FactureclientController@index');
Route::get('factureclts/{id}', 'FactureclientController@show');
Route::post('factureclts', 'FactureclientController@store');
Route::put('factureclts/{id}', 'FactureclientController@update');
Route::delete('factureclts/{id}', 'FactureclientController@destroy');



Route::get('brclts', 'BrclientController@index');
Route::get('brclts/{id}', 'BrclientController@show');
Route::post('brclts', 'BrclientController@store');
Route::put('brclts/{id}', 'BrclientController@update');
Route::delete('brclts/{id}', 'BrclientController@destroy');


Route::get('bcclts', 'BcclientController@index');
Route::get('bcclts/{id}', 'BcclientController@show');
Route::post('bcclts', 'BcclientController@store');
Route::put('bcclts/{id}', 'BcclientController@update');
Route::delete('bcclts/{id}', 'BcclientController@destroy');

Route::get('blclts', 'BlclientController@index');
Route::get('blclts/{id}', 'BlclientController@show');
Route::post('blclts', 'BlclientController@store');
Route::put('blclts/{id}', 'BlclientController@update');
Route::delete('blclts/{id}', 'BlclientController@destroy');


Route::get('devis', 'DeviController@index');
Route::get('devis/{id}', 'DeviController@show');
Route::post('devis', 'DeviController@store');
Route::put('devis/{id}', 'DeviController@update');
Route::delete('devis/{id}', 'DeviController@destroy');

Route::get('proformas', 'ProformaController@index');
Route::get('proformas/{id}', 'ProformaController@show');
Route::post('proformas', 'ProformaController@store');
Route::put('proformas/{id}', 'ProformaController@update');
Route::delete('proformas/{id}', 'ProformaController@destroy');



Route::get('traitefs', 'TraitefController@index');
Route::get('traitefs/{id}', 'TraitefController@show');
Route::post('traitefs', 'TraitefController@store');
Route::put('traitefs/{id}', 'TraitefController@update');
Route::delete('traitefs/{id}', 'TraitefController@destroy');

Route::get('traitecls', 'TraiteclsController@index');
Route::get('traitecls/{id}', 'TraiteclsController@show');
Route::post('traitecls', 'TraiteclsController@store');
Route::put('traitecls/{id}', 'TraiteclsController@update');
Route::delete('traitecls/{id}', 'TraiteclsController@destroy');



Route::get('virementcls', 'VirementclsController@index');
Route::get('virementcls/{id}', 'VirementclsController@show');
Route::post('virementcls', 'virementclsController@store');
Route::put('virementcls/{id}', 'virementclsController@update');
Route::delete('virementcls/{id}', 'virementclsController@destroy');


Route::get('virementfs', 'VirementfsController@index');
Route::get('virementfs/{id}', 'VirementfsController@show');
Route::post('virementfs', 'virementfsController@store');
Route::put('virementfs/{id}', 'virementfsController@update');
Route::delete('virementfs/{id}', 'virementfsController@destroy');

Route::get('especefs', 'EspecefsController@index');
Route::get('especefs/{id}', 'EspecefsController@show');
Route::post('especefs', 'EspecefsController@store');
Route::put('especefs/{id}', 'EspecefsController@update');
Route::delete('especefs/{id}', 'EspecefsController@destroy');

Route::get('espececls', 'EspececlsController@index');
Route::get('espececls/{id}', 'EspececlsController@show');
Route::post('espececls', 'EspececlsController@store');
Route::put('espececls/{id}', 'EspececlsController@update');
Route::delete('espececls/{id}', 'EspececlsController@destroy');



Route::get('chequefs', 'ChequefsController@index');
Route::get('chequefs/{id}', 'ChequefsController@show');
Route::post('chequefs', 'ChequefsController@store');
Route::put('chequefs/{id}', 'ChequefsController@update');
Route::delete('chequefs/{id}', 'ChequefsController@destroy');



Route::get('chequecls', 'ChequeclsController@index');
Route::get('chequecls/{id}', 'ChequeclsController@show');
Route::post('chequecls', 'ChequeclsController@store');
Route::put('chequecls/{id}', 'ChequeclsController@update');
Route::delete('chequecls/{id}', 'ChequeclsController@destroy');

Route::get('chequecadeaucls', 'ChequecadeauclsController@index');
Route::get('chequecadeaucls/{id}', 'ChequecadeauclsController@show');
Route::post('chequecadeaucls', 'ChequecadeauclsController@store');
Route::put('chequecadeaucls/{id}', 'ChequecadeauclsController@update');
Route::delete('chequecadeaucls/{id}', 'ChequecadeauclsController@destroy');


Route::get('chequecadeaufs', 'ChequecadeaufsController@index');
Route::get('chequecadeaufs/{id}', 'ChequecadeaufsController@show');
Route::post('chequecadeaufs', 'ChequecadeaufsController@store');
Route::put('chequecadeaufs/{id}', 'ChequecadeaufsController@update');
Route::delete('chequecadeaufs/{id}', 'ChequecadeaufsController@destroy');




Route::get('tpefs', 'TpefsController@index');
Route::get('tpefs/{id}', 'TpefsController@show');
Route::post('tpefs', 'TpefsController@store');
Route::put('tpefs/{id}', 'TpefsController@update');
Route::delete('tpefs/{id}', 'TpefsController@destroy');



Route::get('tpecls', 'TpeclsController@index');
Route::get('tpecls/{id}', 'TpeclsController@show');
Route::post('tpecls', 'TpeclsController@store');
Route::put('tpecls/{id}', 'TpeclsController@update');
Route::delete('tpecls/{id}', 'TpeclsController@destroy');

Route::get('unites', 'UniteController@index');
Route::get('unites/{id}', 'UniteController@show');
Route::post('unites', 'UniteController@store');
Route::put('unites/{id}', 'UniteController@update');
Route::delete('unites/{id}', 'UniteController@destroy');


















