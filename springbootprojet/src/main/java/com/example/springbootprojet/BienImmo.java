@Entity
public class BienImmo {
     
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private long id;

    private String typeB;
	private int taille;
	private int NbCh;
	private int SuCh;
	private int SuCu;
	private int SuSe;
	private int SuWc;
	private int Prix;
	private int NbP;
	private int NbS;
	private int EdB;
	private int EdC;
	private int EdM;
	private int EEP;
	private int EI;
	private int Lum;
	private int Son;
	private int Pop;
	private int ProxTrans;
	private int ProxEcole;
	private int ProxCom;
	private int Orient;
	private Boolean EauUsee;
	private Boolean Mitoyen;
	private Boolean Fibre;
	private Boolean Piscine;
	private Boolean Jardin;
	private Boolean Ascenseur;
	private Boolean Parking;
	private Boolean Veranda;
	private Boolean Balcon;
	private Boolean Terrasse;
	private Boolean Terrain;
	private Boolean Cave;
	private Boolean Grenier;
     
    // standard constructors / setters / getters / toString
}
