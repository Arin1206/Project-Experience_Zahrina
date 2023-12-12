package alpro;

public class MusimDenganSwitch {

	public static void main(String[] args) {
		int bulan = 4;
		String musim;
		switch (bulan) {
		case 12,1,2 :  
			musim = "Musim Dingin";
		break;
		case 3,4,5 :
			musim = "Musim Semi";
		break;
		case 6,7,8 :
			musim = "Musim Panas";
		break;
		case 9,10,11 :
			musim = "Musim Gugur";
		break;
		default :
			musim = "Bulan tidak valid";
			
		}System.out.println("Bulan April adalah "+musim);
	}

}
