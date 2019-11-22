using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W3_ValueTypeIsNotChanged
{
class Program
    {
        static void Main(string[] args)
        {
            int a = 100;
            Console.WriteLine("Before: " + a);
            ChangeTheNumber(a);
            Console.WriteLine("After: " + a);
            Console.ReadKey();
        }

        private static void ChangeTheNumber(int aNumber)
        {
            aNumber = 200;
        }
    }
}
