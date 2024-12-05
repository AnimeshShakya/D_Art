"use client"

import { useState, useMemo } from "react"
import { GalleryItem } from "@/components/gallery-item"
import { ArtModal } from "@/components/art-modal"

type SortOption = "newest" | "price-low" | "price-high"

const allGalleryItems = [
  // Page 1
  {
    id: 1,
    title: "Mystic Dreams",
    price: 200,
    imageUrl: "/1.jpeg",
    isNew: true,
    description: "Premium & comfortable artwork with a strong composition built with vibrant colors, it feels mesmerizing.",
    rating: 8.5,
    reviews: 15,
    dimensions: {
      height: 52,
      width: 43
    }
  },
  {
    id: 2,
    title: "Urban Reflection",
    price: 180,
    imageUrl: "/10.jpg",
    description: "A beautiful piece of art that captures the essence of urban life.",
    rating: 8.2,
    reviews: 12,
    dimensions: {
      height: 40,
      width: 50
    }
  },
  {
    id: 3,
    title: "Ethereal Light",
    price: 220,
    imageUrl: "/11.jpeg",
    isNew: true,
    description: "A stunning piece of art that showcases the beauty of light.",
    rating: 8.8,
    reviews: 20,
    dimensions: {
      height: 48,
      width: 38
    }
  },
  {
    id: 4,
    title: "Serene Moments",
    price: 190,
    imageUrl: "/12.jpg",
    description: "A peaceful piece of art that captures the serenity of nature.",
    rating: 8.0,
    reviews: 10,
    dimensions: {
      height: 45,
      width: 42
    }
  },
  {
    id: 5,
    title: "Vibrant Essence",
    price: 250,
    imageUrl: "/13.jpeg",
    isNew: true,
    description: "A vibrant piece of art that showcases the beauty of colors.",
    rating: 8.6,
    reviews: 18,
    dimensions: {
      height: 50,
      width: 40
    }
  },
  {
    id: 6,
    title: "Golden Hour",
    price: 210,
    imageUrl: "/14.jpg",
    description: "A beautiful piece of art that captures the essence of the golden hour.",
    rating: 8.4,
    reviews: 14,
    dimensions: {
      height: 42,
      width: 48
    }
  },
  // Page 2
  {
    id: 7,
    title: "Silent Whispers",
    price: 230,
    imageUrl: "/15.jpeg",
    description: "A peaceful piece of art that captures the serenity of silence.",
    rating: 8.1,
    reviews: 11,
    dimensions: {
      height: 38,
      width: 45
    }
  },
  {
    id: 8,
    title: "Urban Poetry",
    price: 270,
    imageUrl: "/16.jpg",
    isNew: true,
    description: "A beautiful piece of art that showcases the beauty of urban life.",
    rating: 8.7,
    reviews: 19,
    dimensions: {
      height: 48,
      width: 38
    }
  },
  {
    id: 9,
    title: "Natural Harmony",
    price: 240,
    imageUrl: "/17.jpeg",
    description: "A peaceful piece of art that captures the serenity of nature.",
    rating: 8.3,
    reviews: 13,
    dimensions: {
      height: 40,
      width: 50
    }
  },
  {
    id: 10,
    title: "City Lights",
    price: 260,
    imageUrl: "/18.jpg",
    description: "A beautiful piece of art that captures the essence of city life.",
    rating: 8.5,
    reviews: 16,
    dimensions: {
      height: 45,
      width: 42
    }
  },
  {
    id: 11,
    title: "Abstract Dreams",
    price: 290,
    imageUrl: "/19.jpeg",
    isNew: true,
    description: "A stunning piece of art that showcases the beauty of abstract art.",
    rating: 8.9,
    reviews: 22,
    dimensions: {
      height: 50,
      width: 40
    }
  },
  {
    id: 12,
    title: "Sunset Boulevard",
    price: 280,
    imageUrl: "/20.jpg",
    description: "A beautiful piece of art that captures the essence of sunset.",
    rating: 8.6,
    reviews: 18,
    dimensions: {
      height: 42,
      width: 48
    }
  },
  // Page 3
  {
    id: 13,
    title: "Morning Dew",
    price: 310,
    imageUrl: "/21.jpeg",
    description: "A peaceful piece of art that captures the serenity of morning.",
    rating: 8.2,
    reviews: 12,
    dimensions: {
      height: 38,
      width: 45
    }
  },
  {
    id: 14,
    title: "Urban Jungle",
    price: 330,
    imageUrl: "/22.jpg",
    isNew: true,
    description: "A beautiful piece of art that showcases the beauty of urban life.",
    rating: 8.8,
    reviews: 20,
    dimensions: {
      height: 48,
      width: 38
    }
  },
  {
    id: 15,
    title: "Desert Rose",
    price: 300,
    imageUrl: "/23.jpeg",
    description: "A stunning piece of art that showcases the beauty of desert landscapes.",
    rating: 8.4,
    reviews: 14,
    dimensions: {
      height: 40,
      width: 50
    }
  },
  {
    id: 16,
    title: "Ocean Breeze",
    price: 320,
    imageUrl: "/24.jpg",
    description: "A peaceful piece of art that captures the serenity of ocean breeze.",
    rating: 8.1,
    reviews: 11,
    dimensions: {
      height: 45,
      width: 42
    }
  },
  {
    id: 17,
    title: "Mountain Peak",
    price: 340,
    imageUrl: "/25.jpeg",
    isNew: true,
    description: "A stunning piece of art that showcases the beauty of mountain landscapes.",
    rating: 8.9,
    reviews: 22,
    dimensions: {
      height: 50,
      width: 40
    }
  },
  {
    id: 18,
    title: "Forest Mystery",
    price: 350,
    imageUrl: "/26.jpg",
    description: "A peaceful piece of art that captures the serenity of forest.",
    rating: 8.6,
    reviews: 18,
    dimensions: {
      height: 42,
      width: 48
    }
  }
]

export default function GalleryPage() {
  const [currentPage, setCurrentPage] = useState(1)
  const [sortOption, setSortOption] = useState<SortOption>("newest")
  const [selectedArt, setSelectedArt] = useState<typeof allGalleryItems[0] | null>(null)
  const itemsPerPage = 6

  // Sort items based on selected option
  const sortedItems = useMemo(() => {
    const items = [...allGalleryItems]
    switch (sortOption) {
      case "price-low":
        return items.sort((a, b) => a.price - b.price)
      case "price-high":
        return items.sort((a, b) => b.price - a.price)
      case "newest":
      default:
        return items.sort((a, b) => b.id - a.id)
    }
  }, [sortOption])

  const totalPages = Math.ceil(sortedItems.length / itemsPerPage)
  
  // Get current items
  const indexOfLastItem = currentPage * itemsPerPage
  const indexOfFirstItem = indexOfLastItem - itemsPerPage
  const currentItems = sortedItems.slice(indexOfFirstItem, indexOfLastItem)

  // Handle sort change
  const handleSortChange = (event: React.ChangeEvent<HTMLSelectElement>) => {
    setSortOption(event.target.value as SortOption)
    setCurrentPage(1) // Reset to first page when sorting changes
  }

  return (
    <div className="relative min-h-screen bg-black">
      {/* Primary gradient overlay */}
      <div className="absolute inset-0 bg-gradient-to-b from-purple-900/10 via-black/5 to-blue-900/10 pointer-events-none" />
      
      {/* Secondary gradient overlay for depth */}
      <div className="absolute inset-0 bg-gradient-to-b from-black/80 via-black/50 to-black/80 pointer-events-none" />

      <div className="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl py-12 relative">
        <div className="space-y-8">
          {/* Header section with its own gradient */}
          <div className="relative py-8 -mt-4 px-4">
            <div className="absolute inset-0 bg-gradient-to-b from-purple-900/10 via-black/5 to-blue-900/10 pointer-events-none" />
            <div className="relative text-center space-y-4">
              <h1 className="text-6xl font-bold">
                <span className="text-white">Art</span>{" "}
                <span className="bg-gradient-to-r from-purple-900/80 to-blue-900/80 bg-clip-text text-transparent">
                  Gallery
                </span>
              </h1>
              <p className="text-gray-400 text-lg max-w-2xl mx-auto">
                Explore our curated collection of unique artworks. Each piece tells a story, waiting to become part of your journey.
              </p>
            </div>
          </div>

          {/* Filter bar with dark gradient */}
          <div className="relative p-4 rounded-lg overflow-hidden">
            <div className="absolute inset-0 bg-gradient-to-r from-purple-900/10 via-black/80 to-blue-900/10 pointer-events-none" />
            <div className="relative flex items-center justify-between">
              <div className="flex items-center space-x-4">
                <span className="text-gray-400">{allGalleryItems.length} items</span>
              </div>
              <div className="flex items-center space-x-4">
                <select 
                  value={sortOption}
                  onChange={handleSortChange}
                  className="bg-black/50 text-gray-300 border border-purple-900/20 rounded-md px-3 py-1 focus:outline-none focus:border-purple-900/50"
                >
                  <option value="newest">Newest</option>
                  <option value="price-low">Price: Low to High</option>
                  <option value="price-high">Price: High to Low</option>
                </select>
              </div>
            </div>
          </div>

          {/* Gallery grid */}
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {currentItems.map((item) => (
              <div key={item.id} onClick={() => setSelectedArt(item)} className="cursor-pointer">
                <GalleryItem
                  title={item.title}
                  price={item.price}
                  imageUrl={item.imageUrl}
                  isNew={item.isNew}
                />
              </div>
            ))}
          </div>

          {/* Pagination with matching gradient */}
          <div className="relative flex justify-center space-x-2 pt-8">
            {Array.from({ length: totalPages }, (_, i) => i + 1).map((page) => (
              <button
                key={page}
                onClick={() => setCurrentPage(page)}
                className={`relative px-4 py-2 rounded-md transition-colors ${
                  page === currentPage
                    ? "bg-gradient-to-r from-purple-900 to-blue-900 text-white"
                    : "bg-black/50 text-gray-400 hover:bg-purple-900/20"
                }`}
              >
                {page}
              </button>
            ))}
          </div>
        </div>
      </div>

      {/* Art Modal */}
      {selectedArt && (
        <ArtModal
          isOpen={!!selectedArt}
          onClose={() => setSelectedArt(null)}
          art={selectedArt}
        />
      )}
    </div>
  )
}
