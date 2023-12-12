package alpro;
interface Hewan {
		double berjalan(double jam);
	class Kuda implements Hewan{
		public double berjalan (double jam) {
			return 88*jam;
		}		
	}
	class Siput implements Hewan {
		public double berjalan (double jam) {
			return 0.1*jam;
		}
	}

}
