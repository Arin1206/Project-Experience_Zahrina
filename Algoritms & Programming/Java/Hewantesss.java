package alpro;

public interface Hewantesss {
	double berjalan(double jam);
	class Kuda implements Hewantesss{
	public double berjalan(double jam) {
	return 88 * jam;
	}
	}
	class Siput implements Hewantesss{
	public double berjalan(double jam) {
	return 0.1 * jam;
	}
	}
}
