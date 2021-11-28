import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
public class LiczbyAutomorficzne 
{
    public static void main(String[] args) throws NumberFormatException, IOException 
    {
        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
        System.out.print("Podaj liczbę n: ");
        int n = Integer.parseInt(reader.readLine()); 
        int i; // zmienna operacyjna
        for(i=1; i<n; i++){ 
            if(("" + (i * i)).endsWith("" + i))
            {
                System.out.println("Liczba: " +i+" to liczba automorficzna: "+(i*i));
            }
        }
    } 
}