package alpro;

public class DemoForTabelKebenaran {

	public static void main(String[] args) {
		final int Ukuran = 15;
		
		for (int i=1;i<=Ukuran;i++) {
			for (int n=1;n<=Ukuran;n++) {
				int z =i*n;
				System.out.print(z+"\t ");
			}
			System.out.println();
		}

	}

}
