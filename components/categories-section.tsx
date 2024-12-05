import { ChevronLeft, ChevronRight } from 'lucide-react'
import { Button } from "@/components/ui/button"
import Image from 'next/image'

export function CategoriesSection() {
  return (
    <section className="relative min-h-screen py-32">
      {/* Background gradient */}
      <div className="absolute inset-0 bg-gradient-to-b from-black/10 via-purple-900/5 to-blue-900/10 pointer-events-none" />
      
      <div className="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl">
        <div className="flex justify-between items-end mb-16">
          <div className="space-y-4 max-w-2xl">
            <h2 className="text-5xl font-bold">
              <span className="text-white">Explore Different</span>
              <br />
              <span className="text-gray-400">Art Categories</span>
            </h2>
            <p className="text-gray-400">
              Say goodbye to interruptions and enjoy uninterrupted music streaming. With our ad-free platform, you&apos;ll have access to millions of songs
            </p>
          </div>
          
          <div className="flex space-x-4">
            <Button
              variant="outline"
              size="icon"
              className="rounded-full w-12 h-12 bg-gray-900/50 border-gray-800 hover:bg-gray-800/50"
            >
              <ChevronLeft className="w-6 h-6 text-gray-400" />
              <span className="sr-only">Previous</span>
            </Button>
            <Button
              variant="outline"
              size="icon"
              className="rounded-full w-12 h-12 bg-gray-900/50 border-gray-800 hover:bg-gray-800/50"
            >
              <ChevronRight className="w-6 h-6 text-gray-400" />
              <span className="sr-only">Next</span>
            </Button>
          </div>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {[
            { title: "Potrait", image: "/191.jpeg" },
            { title: "Glow Art", image: "/4.jpg" },
            { title: "Realistic", image: "/27.jpeg" },
            { title: "Anime Art", image: "/28.jpg" }
          ].map((category, index) => (
            <div key={index} className="group relative overflow-hidden rounded-3xl">
              <div className="relative w-full h-[300px]">
                <Image
                  src={category.image}
                  alt={category.title}
                  width={600}
                  height={300}
                  className="w-full h-full object-cover rounded-2xl"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent" />
                <div className="absolute bottom-0 left-0 right-0 p-6">
                  <h3 className="text-2xl font-semibold text-white">{category.title}</h3>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}
