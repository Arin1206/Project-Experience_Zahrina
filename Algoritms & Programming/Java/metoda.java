package alpro;

public class metoda {

	public static void main(String[] args) {
		int a = 5;
		fr (a);

	}
	public static void fr(int n) {
		if (n>0) {
			fr (n/2);
			System.out.println(n%2+" hasil dari "+n);
		}
	}
}
