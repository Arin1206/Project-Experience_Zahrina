package alpro;
import java.util.Random;
public class WhileGCD {

	public static void main(String[] args) {
		Random acak = new Random ();
		float x = acak.nextFloat();
		int m = (int)Math.round(999*x+2);
		x = acak.nextFloat();
		int n = (int)Math.round(999*x+2);
		
		while (m>0) {
			if (m<n) {
				int temp =m;
				m=n;
				n=temp;
				System.out.println("m = "+m+"\t\t\tn= "+n);
			}m-=n;
		}
		System.out.println("GCD atas m dan terbesar adalah "+n);
		
				

	}

}
