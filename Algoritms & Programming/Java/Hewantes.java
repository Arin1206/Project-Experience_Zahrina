package alpro;
	class hewantest {
		public static void main(String[] args) {
		Hewant seekorKuda = new Kuda();
		Hewant seekorSiput = new Siput();
		double waktuTempuh = 1.5;
		System.out.println("Setelah berjalan selama "
		+ waktuTempuh + " jam:");
		System.out.printf("%s telah menempuh jarak sejauh %.2f km\n",
		seekorKuda.getClass().getSimpleName(),
		seekorKuda.berjalan(waktuTempuh));
		System.out.printf("%s telah menempuh jarak sejauh %.2f km\n",
		seekorSiput.getClass().getSimpleName(),
		seekorSiput.berjalan(waktuTempuh));
		}
		}

