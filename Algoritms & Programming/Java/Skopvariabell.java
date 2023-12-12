//mendemonstrasikan skop variabel 
public class Skopvariabell {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int x; //dikenali semua metode di dalam main
		x = 10;
		
		if (x == 10) {//mulai skopbaru 
			int y = 20;//hanya dikenali di dalam blok if ini
			
			// x dan y keduanya dinali disini
			System.out.println(" x dan y adalah : " + x + " " + y);
			x = y* 2;
		}
		//y=100 //error! y tidak dikenali disini;
		//x masih dikenali;
		System.out.println("x adalah " + x);

	}

}
