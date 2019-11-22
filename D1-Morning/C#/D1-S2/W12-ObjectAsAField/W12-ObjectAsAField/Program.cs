using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W12_ObjectAsAField
{
    class Program
    {
        static void Main(string[] args)
        {
            Student aStudent = new Student();
            aStudent.Name = "Jamil";
            aStudent.Email = "j@mail.com";
            Result myResult = new Result();
            myResult.Grade = "A+";
            myResult.PublishedYear = 2018;
            aStudent.ResultSheet = myResult;
            Result aResult = aStudent.ResultSheet;

        }
    }
}
