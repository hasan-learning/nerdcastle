using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W15_ManyToMany
{
    public class Course
    {
        public string Title { set; get; }
        public double Credit { set; get; }
        public Course(string title, double credit)
        {
            Title = title;
            Credit = credit;
        }
    }
}
