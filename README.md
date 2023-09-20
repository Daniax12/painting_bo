The back office project for selling paintings is designed to provide a comprehensive administrative system to manage all aspects related to the art business. It includes CRUD (Create, Read, Update, Delete) operations for artists, paintings, and a sales dashboard.


// Temp:
Architecture Logiciel:
1/3: Monoposte
2/3: Server - Client (MySql etc)
3/3: Le web, Donnes - Serveur Web - CLient

N/3: Infini

Serveur de donnees - Serveur d'application - Serveur Web (Serveur d'affichage)

Ex: CIN numerique
- Sante
- Foncier
- Banque postale

Mampiditra numero CIN -> Contenu rehetra momban'ny olona

Serveur de donnees 1 - Serveur d'application Sante - 
Serveur de donnees 2 - Serveur d'application Foncier ->	<- Serveur Web (Serveur d'affichage)
Serveur de donnees 3 - Serveur d'application Postale -

Serveur d'application: dans SI, servir fonction

ex: SA Foncier
	Tany[] getTany(String idCin)
	
    SA Banque:
    	Manao achat en ligne skin sur PUBG, misy ifandraisany amn Banque
    	Banque manome serveur d'application avec function: (FONCTION NO SERVIAVANA FA TSY DONNEES)
    		- boolean mananaVe(String idCLient, double montant)
    		- void payer(String idClient, double montant)
    	Serveur d'application: Service/Function + data ( mananaVe + true na false)
    
    Telma:
    	Stagiaire tsy omena acces bases general, ex: base Mvola -> Serveur d'application no omena -> MIsy ny fonction ilaina.
    	ohatra momban abonnes: Abonne[] getAbonnes(String id)
    	
    	Fonction mamerina donnes no serviavana amzay afaka re-exploitena le donnees
    	
 NB: Serveur d'affichage -> CLient ohatra hoe navigateur chrome, firefox
 -> Tsy azo atao no manokatra connexion anaty serveur d'affichage en terme de securite, reetilisation.
 Examen: CIN Numerique
 
 Comment:
 
 3 etapes afaka apesana anazy: 
 - CORBA RMI Remote Method Invocation, Appel de methode distante
 Ao anaty serveur d'application no executena ilay fonction -> mandefa valiny mandeha Serveur Affichage
 
 Corba mamorona object, C++ Tany* -> Java Tany[], mandalo classe intermediaire vao mandeha java
 
 - EJB :
 Samy java ihany
 MIsy persistence, vao manao new -> Tode insert anaty base
 	. BEAN Manage Persistence: Ensemble de Composants, ensemble de fonction partagena au niveau entreprise
 	. Container Manage Persistence :
  
 Publication function: misy role (interne et externe), choix des utilisateurs
  
 - Web Service :
Function iray publiena dia atsona
xml no format de donnes azo avy amn function iray -> Amzao efa json

EXAM:

    	
    	
 
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
    		
