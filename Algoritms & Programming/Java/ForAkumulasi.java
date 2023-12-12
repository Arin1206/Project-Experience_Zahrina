package alpro;
import java.util.Random;
public class ForAkumulasi {

	public static void main(String[] args) {
		Random acak = new Random();
		int hasil=0;
		for (int i=0;i<5;i++) {
			float jum = acak.nextFloat();
			int n =Math.round(jum*100);
			hasil+=n;
			System.out.println("x = "+n+"\t\t\t\thasil = "+hasil);
		}

	}

}
