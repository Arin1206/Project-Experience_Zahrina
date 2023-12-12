package alpro;

public class Metodekubik {

	public static void main(String[] args) {
		for (int i=0;i<=1500;i++) {
			System.out.println(i+"\t"+Kubik(i));
		}
	}
	static int Kubik(int n) {
		return n*n*n;
	}
}
 