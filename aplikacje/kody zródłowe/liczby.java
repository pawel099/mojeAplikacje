import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
 
public class SredniaNieparzystych 
{
    public static void main(String[] args) throws IOException 
    {
        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
        int suma = 0;
        int np = 0;
        int sumap = 0;
        int p = 0;
        int liczba;
        for(int licznik = 0; licznik < 10; licznik++) 
        {
            System.out.print("Liczba " + licznik + ": ");
            liczba = Integer.parseInt(reader.readLine());
            if (liczba % 2 == 1) 
            {
                suma += liczba;
                np++;
            } 
            else
            {
                sumap += liczba;
                p++;
            }
        }
        if(np != 0)
        {
            System.out.println("Średnia nieparzystych: " + ((double) suma / np));
        }   
        else
        {
            System.out.println("Brak liczb nieparzystych");
        }
        if(p != 0)
        {
            System.out.println("Średnia parzystych: " + ((double) sumap / p));
        }   
        else
        {
            System.out.println("Brak liczb parzystych");
        }
    }
}