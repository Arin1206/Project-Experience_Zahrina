package alpro;

public class IfOperatorGabung {

	public static void main(String[] args) {
		final int PJG = 255;
		byte Penyangga []= new byte [PJG];
		System.out.println("Masukkan nama depan anda : ");
		try {System.in.read(Penyangga,0,PJG);}
		catch (Exception e) { }
		String nama = new String (Penyangga);
		System.out.println("Hai, "+nama.trim());
		char c = nama.charAt(0);
		System.out.println("Huruf pertama pada nama anda adalah "+c);
		if (c=='A'||c=='I'||c=='U'||c=='E'||c=='O')
			System.out.println("Termasuk Huruf vokal");
		else 
			System.out.println("Bukan huruf vokal");
	}

}
