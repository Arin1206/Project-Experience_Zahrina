package alpro;
import java.util.Random;
public class NilaiHurufSwitch {

	public static void main(String[] args) {
		Random rm = new Random ();
		
		float x = rm.nextFloat();
		System.out.println("x = "+x);
		int Skor = Math.round(50*x+50);
		System.out.println("Skor anda adalah : "+Skor);
		
		switch (Skor/10) {
		case 10:
			System.out.print("Anda mendapatkan Skor A");
		break;
		case 9 :
			System.out.print("Anda mendapatkan Skor B");
		break;
		case 8 :
			System.out.print("Anda mendapatkan Skor C");
		break;
		case 7 :
			System.out.print("Anda mendapatkan Skor D");
		break;
		case 6 :
			System.out.print("Anda mendapatkan Skor E");
		break;
		default :
			System.out.print("Anda mendapatkan nilai F");
			
		}
		if (Skor>=60 && Skor <100)
			if (Skor %10 >7) System.out.print("+");
			else if (Skor %10<2) System.out.print("-");

	}

}
