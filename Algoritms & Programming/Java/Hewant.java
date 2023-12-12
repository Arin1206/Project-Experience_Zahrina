package alpro;
public interface Hewant {
	double berjalan(double jam);
}
class Kuda implements Hewant{
	public double berjalan(double jam) {
	return 88 * jam;
	}
}
class Siput implements Hewant{
	public double berjalan(double jam) {
	return 0.1 * jam;
	}
}
