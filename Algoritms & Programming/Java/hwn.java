package alpro;
class hwn {

	public static void main(String[] args) {
		Hewan seekorkuda=new Kuda();
		Hewan seekorSiput=new Siput();
		
		double waktutempuh=1.5;
		System.out.println("Setelah berjalan selama "+ waktutempuh + " jam:");
		System.out.printf("%s telah menempuh jarak sejauh %.2f km\n", seekorkuda.getClass().getSimpleName(),seekorkuda.berjalan(waktutempuh));
		System.out.printf("%s telah menempuh jarak sejauh %.2f km\n",seekorSiput.getClass().getSimpleName(),seekorSiput.berjalan(waktutempuh));
	}

}
