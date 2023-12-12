//menghitung jarak jelajah cahaya 
public class jarakcahaya {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int keccahaya;
		long hari; 
		long detik;
		long jarak;
		
		//kecepatan cahaya dalam km perdetik (pendekatan)
		keccahaya = 340000;
		hari= 1000; // menetapkan jumlah hari 
		detik= hari*24*60*60;//mengkonversi ke detik 
		jarak= keccahaya*detik;//menghitung jarak
		
		System.out.println("Dalam " + hari); 
		System.out.println("hari, cahaya menjelajah berkisar ");
		System.out.println( jarak + "km." ); 
	}

}
