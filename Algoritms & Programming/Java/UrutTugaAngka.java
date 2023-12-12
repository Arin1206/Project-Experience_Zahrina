package alpro;
import java.util.Random;
public class UrutTugaAngka {

	public static void main(String[] args) {
		Random Rm = new Random ();
		float a,b,c;
		a = Rm.nextFloat();
		System.out.println("a = "+a);
		b = Rm.nextFloat();
		System.out.println("b = "+b);
		c = Rm.nextFloat();
		System.out.println("c = "+c);
		if (a<b)
			if (b<c)
				System.out.println("a<b<c");
			else 
				if (a<c) System.out.println("a<c<b");
				else System.out.println("c<a<b");
		else 
			if (a<c)System.out.println("b<a<c");
			else 
				if(b<c)System.out.println("b<c<a");
				else System.out.println("c<b<a");	

	}

}
