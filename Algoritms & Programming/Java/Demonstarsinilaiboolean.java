// Demonstrasi Nilai Boolean 
public class Demonstarsinilaiboolean {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		boolean b;
		b= false;
		System.out.println("b adalah " + b);
		
		b= true;
		System.out.println("b adalah " + b);
		
		//suatu nilai boolean dapat mengendalikan statemen if
		if (b) System.out.println("ini dieksekusi");
		
		b=false;
		if(b) System.out.println("tidak dieksekusi");
		
		//keluaran darioperator relasiona adalah nilai boolean 
		System.out.println("8 > 9 adalah " + (8>9));
	}
}
