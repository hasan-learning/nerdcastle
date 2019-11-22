using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W13_OneToOne
{
    class Program
    {
        static void Main(string[] args)
        {
            Employee employee1 = new Employee("Masud", "m@mail.com", "E-9272");
            Address add1 = new Address("D3", "1021", "32A", "Pilkhana","Dhanmondi", "Dhaka");
            employee1.PresentAddress = add1;

            Address employee1Address = employee1.PresentAddress;
            string employee1House = employee1.PresentAddress.House;
            employee1House = employee1Address.House;

            Console.WriteLine(employee1House);
            
            Employee employee2 = new Employee("Rimi", "r@mail.com", "E-8645");
            Address add2 = new Address("35", "12", "88", "O R Nijam Road", "Sadar", "Ctg");
            employee2.PresentAddress = add2;

            Console.WriteLine(employee2.PresentAddress.District);
            Console.ReadKey();
        }
    }
}
