using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W7_ListOfNames
{
    class Program
    {
        static void Main(string[] args)
        {
            List<string> nameList = new List<string>();

            nameList.Add("Rana");
            nameList.Add("Sumona");
            nameList.Add("Alif");
            nameList.Add("Kartik");

            foreach (string aName in nameList)
            {
                Console.WriteLine(aName);
            }


            //string name = nameList[2];
            //nameList.Remove("Sumona");
            //nameList[0] = "Jamil";

            //Console.WriteLine("****After change***");


            //foreach (string aName in nameList)
            //{
            //    Console.WriteLine(aName);
            //}

            //nameList.Add("Sumona");

            Console.ReadLine();

        }
    }
}
