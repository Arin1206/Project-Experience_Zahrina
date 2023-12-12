package alpro;
import java.util.Random;
public class IfParalel {

	public static void main(String[] args) {
		Random rm =new Random();
		float a,b,c;
		a = rm.nextFloat();
		System.out.println("a = "+a);
		b = rm.nextFloat();
		System.out.println("b = "+b);
		c = rm.nextFloat();
		System.out.println("c = "+c);
		if (a<b && b<c) System.out.println("a<b<c");
		if (a<c && c<b) System.out.println("a<c<b");
		if (b<a && a<c) System.out.println("b<a<c");
		if (b<c && c<a) System.out.println("b<c<a");
		if (c<a && a<b) System.out.println("c<a<b");
		if (c<b && b<a) System.out.println("c<b<a");
		
	}

}
