package alpro;
import java.util.Random;
public class DoWhilePrima {

	public static void main(String[] args) {
		Random acak =new Random ();
		float x = acak.nextFloat();
		System.out.println("x = "+x);
		int n = Math.round(x*97+2);
		boolean apaprima;
		int d = 2;
		
		do {
			apaprima = (n%d++!=0);
		}while (apaprima && d <n);
		if (apaprima) System.out.println(n+" adalah bilangan prima");
		else System.out.println(n+" adalah bilangan bukan prima");
	}

} //2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
//41, 43, 47, 53, 59, 61, 71, 73, 79, 83, 89, dan 97.
