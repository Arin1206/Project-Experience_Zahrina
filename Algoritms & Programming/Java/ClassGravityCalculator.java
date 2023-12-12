
public class ClassGravityCalculator {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		double Gravity=-9.81;
		double initialVelocity=0.0;
		double initialPosition= 0.0;
		double Fallingtime= 10.0;
		double FinalPosition=0.5*Fallingtime*Fallingtime;
		
		FinalPosition=FinalPosition+initialVelocity*Fallingtime;
		FinalPosition=FinalPosition+initialPosition;
		System.out.println("An Object's position after "+ Fallingtime +" second is "+FinalPosition+" m.");
		

	}

}
