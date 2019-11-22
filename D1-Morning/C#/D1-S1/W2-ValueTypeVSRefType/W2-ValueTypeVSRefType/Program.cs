using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W2_ValueTypeVSRefType
{
    class Program
    {
        static void Main(string[] args)
        {
            int a = 1;
            int b = 2;

            a = b;
            b = 20;
            a = 10;

            Student st1 = new Student();
            st1.name = "Zabed";
            st1.cGPA = 3.45;
            st1.ageInYear = 23;

            Console.WriteLine(st1.name);
            Console.WriteLine(st1.cGPA);
            Console.WriteLine(st1.ageInYear);
            Console.WriteLine("---");

            Student st2 = st1;

            st2.name = "Jamil";
            st2.cGPA = 3.75;
            st2.ageInYear = 24;

            Console.WriteLine(st1.name);
            Console.WriteLine(st1.cGPA);
            Console.WriteLine(st1.ageInYear);
            Console.WriteLine("---");
            Console.WriteLine(st2.name);
            Console.WriteLine(st2.cGPA);
            Console.WriteLine(st2.ageInYear);


            st2 = null;

            Console.WriteLine(st1.name);
            Console.WriteLine(st1.cGPA);
            Console.WriteLine(st1.ageInYear);
            Console.WriteLine("---");
            Console.WriteLine(st2.name);
            Console.WriteLine(st2.cGPA);
            Console.WriteLine(st2.ageInYear);

            Console.ReadKey();
        }
    }
}
